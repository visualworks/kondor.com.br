import React from "react";
import App from "app";

export default class FragmentAbout extends App {
    constructor(props) {
        super(props);
    }
    render() {
        const fragment = (
            <aside>
                <figure>
                    <img src="/img/Kondor_6_1300x867-300x200@2x.jpg" alt="Kondor_6_1300x867" />
                    <figcaption className="has-text-centered">
                        Instalações Kondor
                </figcaption>
                </figure>
                <hr />
                <figure>
                    <img src="/img/Kondor_3_1300x867-300x200@2x.jpg" alt="Kondor_3_1300x867" />
                    <figcaption className="has-text-centered">
                        Instalações Kondor
                </figcaption>
                </figure>
            </aside>
        );
        return fragment;

    }
}