// DOM Element Selectors
const taskInput = document.getElementById('taskInput');
const addTaskBtn = document.getElementById('addTaskBtn');
const taskList = document.getElementById('taskList');

// Key for LocalStorage
const STORAGE_KEY = 'tasks';

/**
 * 🛠 Utility Functions for LocalStorage
 * The data structure in LocalStorage will be an array of objects:
 * [{ text: 'Task 1', completed: false }, { text: 'Task 2', completed: true }]
 */
const getTasks = () => {
    // Retrieve the string from LocalStorage, parse it into a JS array/object.
    // If null (first run), return an empty array.
    const tasksJson = localStorage.getItem(STORAGE_KEY);
    return tasksJson ? JSON.parse(tasksJson) : [];
};

const saveTasks = (tasks) => {
    // Convert the JS array/object to a JSON string and store it.
    localStorage.setItem(STORAGE_KEY, JSON.stringify(tasks));
};

/**
 * 🏗 DOM Rendering Function
 * Creates and appends a single task <li> element to the task list.
 */
const createTaskElement = (task, index) => {
    // 1. Create the main list item
    const listItem = document.createElement('li');
    listItem.classList.toggle('completed', task.completed); // Add 'completed' class if needed
    
    // Set a data attribute to store the task's index in the array
    listItem.dataset.index = index; 

    // 2. Create the task text element (click to toggle completion)
    const taskText = document.createElement('span');
    taskText.textContent = task.text;
    taskText.addEventListener('click', () => toggleTaskCompletion(index));

    // 3. Create the Delete button
    const deleteBtn = document.createElement('button');
    deleteBtn.textContent = 'Delete';
    deleteBtn.addEventListener('click', () => deleteTask(index));

    // 4. Assemble the <li>
    listItem.appendChild(taskText);
    listItem.appendChild(deleteBtn);
    taskList.appendChild(listItem);
};

/**
 * 🔄 Main Logic Functions
 */

// Draws all tasks from LocalStorage onto the DOM
const renderTasks = () => {
    taskList.innerHTML = ''; // Clear existing list items
    const tasks = getTasks();
    tasks.forEach((task, index) => {
        createTaskElement(task, index);
    });
};

// Adds a new task to the array and updates LocalStorage/DOM
const addTask = () => {
    const text = taskInput.value.trim();

    if (text === '') {
        alert('Please enter a task!');
        return;
    }

    const tasks = getTasks();
    const newTask = { text: text, completed: false };
    tasks.push(newTask);
    saveTasks(tasks);

    // Clear input and re-render the list
    taskInput.value = '';
    renderTasks();
};

// Toggles the 'completed' status of a task
const toggleTaskCompletion = (index) => {
    const tasks = getTasks();
    // Toggle the boolean value
    tasks[index].completed = !tasks[index].completed;
    saveTasks(tasks);
    renderTasks(); // Re-render to update DOM class
};

// Deletes a task from the array
const deleteTask = (index) => {
    // Confirm delete to prevent accidental removal
    if (confirm('Are you sure you want to delete this task?')) {
        const tasks = getTasks();
        // Remove 1 element at the specified index
        tasks.splice(index, 1);
        saveTasks(tasks);
        renderTasks(); // Re-render the list
    }
};

/**
 * Event Listeners & Initialization
 */

// 1. Event listener for the "Add Task" button
addTaskBtn.addEventListener('click', addTask);

// 2. Event listener for pressing 'Enter' in the input field
taskInput.addEventListener('keypress', (event) => {
    if (event.key === 'Enter') {
        addTask();
    }
});

// 3. Initial call: Load and display tasks when the page loads
document.addEventListener('DOMContentLoaded', renderTasks);