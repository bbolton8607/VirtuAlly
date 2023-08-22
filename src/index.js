import "../css/style.scss";

// Our Modules / Classes

import MobileMenu from "./modules/MobileMenu.js";
import StickyHeader from "./modules/StickyHeader";
import Search from "./modules/Search";
import Dropdown from "./modules/Dropdown";

// Instantiate a new object using our modules/classes

const stickyHeader = new StickyHeader();
const mobileMenu = new MobileMenu();

if (module.hot) {
  module.hot.accept();
}
