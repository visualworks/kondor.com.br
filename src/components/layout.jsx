import React from "react";
import App from "app";
import Header from "components/header";
import Content from "components/content";
import Footer from "components/footer";


export default class Layout extends App {
    constructor(props) {
        super(props);
    }
    render() {
        const header = <Header />;
        const content = <Content content={this.state.content} />;
        const footer = <Footer />;
        const layout = (
            <div className="layout">
                {header}
                {content}
                {footer}
            </div>
        );
        return layout;
    }
}