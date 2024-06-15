const menuItems = [
    { name: "Grilled Salmon with Steamed Vegetables", price: "$12.99" },
    { name: "Chicken and Rice Casserole", price: "$10.99" },
    { name: "Vegetable Soup with Whole Grain Bread", price: "$8.99" }
];

// Function to populate menu
function populateMenu() {
    const menuContainer = document.getElementById('menu-items');
    menuItems.forEach(item => {
        const menuItem = document.createElement('div');
        menuItem.classList.add('menu-item');
        menuItem.innerHTML = `<h3>${item.name}</h3><p>${item.price}</p>`;
        menuContainer.appendChild(menuItem);
    });
}

// Populate menu when the page loads
window.onload = populateMenu;