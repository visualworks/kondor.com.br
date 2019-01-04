import React from "react";
import App from "app";

export default class ViewDefault extends App {
    constructor(props) {
        super(props);
        this.getPageWithFragment = this.getPageWithFragment.bind(this);
        this.getPageWithContainer = this.getPageWithContainer.bind(this);
        this.getFullWidth = this.getFullWidth.bind(this);
    }
    getPageWithFragment(content, fragment) {
        const section = <section className="main-content container section">
            <div className="columns">
                <div className="column is-one-third">
                    {fragment}
                </div>
                <div className="column is-two-third">
                    {content}
                </div>
            </div>
        </section>;
        return section;
    }
    getPageWithContainer(content) {
        const section = <section className="main-content container section">
            {content}
        </section>;
        return section;
    }
    getFullWidth(content) {
        const section = <div>
            {content}
        </div>;
        return section;
    }
    render() {
        let section;
        if (this.props.fragment) {
            section = this.getPageWithFragment(this.props.content, this.props.fragment)
        } else if (this.props.content) {
            section = this.getPageWithContainer(this.props.content)
        } else if (this.props.fullwidth) {
            section = this.getFullWidth(this.props.fullwidth);
        } else {
            section = null;
        }
        return section;
    }
}