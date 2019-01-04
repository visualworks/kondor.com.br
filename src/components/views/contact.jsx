import React from "react";
import App from "app";

export default class ViewContact extends App {
    constructor(props) {
        super(props);
    }
    render() {
        const content = <div className="content">
            <h2 className="title">Contato</h2>
            <h3 className="subtitle">Kondor Ltda</h3>
            <p>Rua Flor de Noiva 1.029 – CEP: 08597-630 – Itaquaquecetuba – SP – Brasil<br />Fone / Fax: (11) 4646-8888</p>
            <p>Caso tenha interesse em fazer parte do nosso time, encaminhe seu currículo para o e-mail: <a href="mailto:rh@kondor.com.br" target="_blank">rh@kondor.com.br</a>.</p>
            <iframe className="iframe-googlemaps" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3660.1224109224922!2d-46.3257634!3d-23.456048600000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce7cf5dd19964f%3A0x4aba6b77b374eaf9!2sRua+Flor+de+Noiva%2C+1029+-+Quinta+da+Boa+Vista+(Industrial)!5e0!3m2!1sen!2s!4v1397008837065"></iframe>
        </div>;
        return (content);
    }
}