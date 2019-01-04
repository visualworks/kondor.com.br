import React from "react";
import App from "app";
import Navbar from "components/navbar/navbar";

export default class Header extends App {
    constructor(props) {
        super(props);
    }
    render() {
        const headerToolbar = <div className="header-toolbar"></div>;
        const navbar = <div className="container"><Navbar /></div>;
        const header = (
            <header>
                {headerToolbar}
                {navbar}
            </header>
        );
        return header;
    }
}