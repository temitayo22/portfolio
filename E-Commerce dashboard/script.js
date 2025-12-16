document.addEventListener('DOMContentLoaded', function() {
    // --- 1. CHART INITIALIZATION (Chart.js) ---

    // Data for the charts
    const revenueData = {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
            label: 'Monthly Revenue ($)',
            data: [3000, 4500, 3200, 5100, 4800, 6000],
            backgroundColor: 'rgba(0, 123, 255, 0.5)',
            borderColor: '#007bff',
            borderWidth: 2,
            tension: 0.4, // Smooth curve
            fill: true
        }]
    };

    const productData = {
        labels: ['Laptop Pro', 'Smartwatch', 'Wireless Mouse', 'Keyboard'],
        datasets: [{
            label: 'Sales by Product',
            data: [40, 25, 20, 15], // Percentage
            backgroundColor: [
                '#007bff', // Blue
                '#28a745', // Green
                '#ffc107', // Yellow
                '#dc3545'  // Red
            ],
            hoverOffset: 4
        }]
    };

    // Revenue Trend Line Chart
    const revenueCtx = document.getElementById('revenueChart').getContext('2d');
    new Chart(revenueCtx, {
        type: 'line',
        data: revenueData,
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Product Sales Doughnut Chart
    const productCtx = document.getElementById('productChart').getContext('2d');
    new Chart(productCtx, {
        type: 'doughnut',
        data: productData,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                }
            }
        }
    });

    // --- 2. MOBILE SIDEBAR TOGGLE ---

    const menuBtn = document.getElementById('menu-btn');
    const sidebar = document.querySelector('.sidebar');

    menuBtn.addEventListener('click', () => {
        // Toggles the 'show' class on the sidebar
        sidebar.classList.toggle('show');
    });

    // Optional: Hide sidebar when a link is clicked on mobile
    const navItems = document.querySelectorAll('.nav-item');
    navItems.forEach(item => {
        item.addEventListener('click', () => {
            if (window.innerWidth <= 768) {
                sidebar.classList.remove('show');
            }
        });
    });
});