import React from "react";
import App from "app";

export default class NavbarLink extends App {
    constructor(props) {
        super(props);
    }
    render() {
        const linkTarget = this.props.linkTarget ? this.props.linkTarget : "_self";
        const navbarLink = (
            <a href={this.props.href} className={this.props.className} target={linkTarget} onClick={(event) => this.navigate(event)} >{this.props.text}</a>
        );
        return navbarLink;
    }
}