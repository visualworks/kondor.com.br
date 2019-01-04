import { Component } from "react";

export default class App extends Component {
    constructor(props) {
        super(props);
        this.state = {
            content: window.location.hash
        };
        this.navigate = this.navigate.bind(this);
    }
    navigate(event) {
        event.preventDefault();
        const url = new URL(event.target.href);
        if (!url) {
            console.assert(event.target);
            return false;
        }
        this.setState({
            content: this.content
        });
        window.location.assign(url);
        this.content = window.location.hash;
        window.location.reload(true);
        return true;
    }
}