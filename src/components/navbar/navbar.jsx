import React from "react";
import App from "app";
import NavbarStart from "components/navbar/navbar-start";
import NavbarEnd from "components/navbar/navbar-end";

export default class Navbar extends App {
    constructor(props) {
        super(props);
    }
    render() {
        const navbarStart = <NavbarStart />;
        const navbarEnd = <NavbarEnd />;
        const burgerMenu = <div className="navbar-burger">
            <span></span>
            <span></span>
            <span></span>
        </div>;
        const navbar = (
            <nav className="navbar" role="navigation" aria-label="main navigation">
                <div className="navbar-brand">
                    <a className="navbar-item" href="/">
                        <img src="/img/logo-kondor.jpg" alt="Kondor - Tecnologia em Mecânica" />
                    </a>
                    {burgerMenu}
                </div>
                <div className="navbar-menu">
                    {navbarStart}
                    {navbarEnd}
                </div>
            </nav>
        );
        return navbar;
    }
}