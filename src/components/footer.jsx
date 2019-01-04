import React from "react";
import App from "app";
import NavbarLink from "./navbar/navbar-link";

export default class Footer extends App {
    constructor(props) {
        super(props);
    }
    render() {
        const about = <section className="column content has-text-justified">
            <h3 className="title">Sobre a Kondor</h3>
            <p>A Indústria Mecânica Kondor atua no mercado há mais de 40 anos, prestando serviços de usinagem de alta-precisão destinadas à montadoras de veículos pesados, como tratores, caminhões e implementos agrícolas, bem como o setor automotivo e usinagem em geral.</p>
        </section>;
        const quickLinks = <section className="column content">
            <h3 className="title">Acesso Rápido</h3>
            <ul>
                <li><a href="/#nossa-empresa" onClick={(event) => this.navigate(event)}>Sobre a empresa</a></li>
                <li><a href="/#produtos" onClick={(event) => this.navigate(event)}>Produtos</a></li>
                <li><a href="/#clientes" onClick={(event) => this.navigate(event)}>Clientes</a></li>
                <li><a href="/#qualidade" onClick={(event) => this.navigate(event)}>Qualidade</a></li>
                <li><a href="/#contato" onClick={(event) => this.navigate(event)}>Contato</a></li>
            </ul>
        </section>;
        const technologies = <section className="column content">
            <h3 className="title">Nossas Tecnologias</h3>
            <ul className="menu-list">
                <li><NavbarLink href="#tecnologia/centros-de-usinagem-horizontais" text="Centro de usinagem horizontais" /></li>
                <li><NavbarLink href="#tecnologia/centros-de-usinagem-verticais" text="Centro de usinagem verticais" /></li>
                <li><NavbarLink href="#tecnologia/equipamentos-de-medicao" text="Equipamentos de medição" /></li>
                <li><NavbarLink href="#tecnologia/escateladora-de-dentes" text="Escateladora de dentes" /></li>
                <li><NavbarLink href="#tecnologia/fresadoras" text="Fresadoras" /></li>
                <li><NavbarLink href="#tecnologia/furadeiras" text="Furadeiras" /></li>
                <li><NavbarLink href="#tecnologia/tornos-cnc" text="Tornos CNC" /></li>
                <li><NavbarLink href="#tecnologia/tornos-mecanicos" text="Tornos mecânicos" /></li>
            </ul>
        </section>;
        const contact = <section className="column content">
            <h3 className="title">Indústria Mecânica Kondor Ltda.</h3>
            <p>Rua Flor de Noiva, 1.029<br />Itaquaquecetuba - SP<br />CEP 08597-630</p>
            <p>+55 (11) 4646-8888</p>
            <p>kondor@kondor.com.br</p>
        </section>;
        const footerContent = <div className="container"><div className="columns">{technologies}{quickLinks}{contact}{about}</div></div>;
        return (<footer className="footer">{footerContent}</footer>);
    }
}