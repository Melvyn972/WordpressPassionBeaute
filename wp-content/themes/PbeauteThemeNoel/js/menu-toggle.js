document.addEventListener("DOMContentLoaded", function() {
    const menuItems = document.querySelectorAll(".menu-item-has-children > a");

    const subMenus = document.querySelectorAll(".menu-item-has-children > .sub-menu");
    subMenus.forEach((subMenu) => {
        subMenu.style.display = "none";
    });

    menuItems.forEach((item) => {
        const subMenu = item.nextElementSibling;
        if (subMenu && subMenu.querySelector(".menu-item-has-children")) {
            item.classList.add("has-submenu");
        }

        item.addEventListener("click", function(event) {
            event.preventDefault();

            document.querySelectorAll(".menu-item-has-children > .sub-menu").forEach(openSubMenu => {
                if (openSubMenu !== subMenu && !openSubMenu.contains(subMenu)) {
                    openSubMenu.style.display = "none";
                }
            });

            if (subMenu) {
                subMenu.style.display = subMenu.style.display === "block" ? "none" : "block";
            }
        });
    });
});