import React from "react";
import App from "app";
import NavbarLink from "components/navbar/navbar-link";

export default class NavbarEnd extends App {
    constructor(props) {
        super(props);
    }
    render() {
        const navbarEnd = (<div className="navbar-end">
            <NavbarLink className="navbar-item" href="/#home" text="Home" />
            <div className="navbar-item has-dropdown is-hoverable">
                <NavbarLink className="navbar-link" href="/#nossa-empresa" text="Sobre a empresa" />
                <div className="navbar-dropdown is-boxed">
                    <NavbarLink className="navbar-item" href="/#nossa-empresa/plano-estrategico" text="Plano Estratégico" />
                    <NavbarLink className="navbar-item" href="/#nossa-empresa/guia-do-visitante" text="Guia do visitante" />
                </div>
            </div>
            <NavbarLink className="navbar-item" href="/#produtos" text="Produtos" />
            <NavbarLink className="navbar-item" href="/#clientes" text="Clientes" />
            <NavbarLink className="navbar-item" href="/#qualidade" text="Qualidade" />
            <div className="navbar-item has-dropdown is-hoverable">
                <NavbarLink className="navbar-link" href="/#tecnologia" text="Tecnologia" />
                <div className="navbar-dropdown is-boxed">
                    <NavbarLink className="navbar-item" href="/#tecnologia/centros-de-usinagem-horizontais" text="Centros de usinagem horizontais" />
                    <NavbarLink className="navbar-item" href="/#tecnologia/centros-de-usinagem-verticais" text="Centros de usinagem verticais" />
                    <NavbarLink className="navbar-item" href="/#tecnologia/equipamentos-de-medicao" text="Equipamentos de medição" />
                    <NavbarLink className="navbar-item" href="/#tecnologia/escateladora-de-dentes" text="Escateladora de dentes" />
                    <NavbarLink className="navbar-item" href="/#tecnologia/fresadoras" text="Fresadoras" />
                    <NavbarLink className="navbar-item" href="/#tecnologia/furadeiras" text="Furadeiras" />
                    <NavbarLink className="navbar-item" href="/#tecnologia/tornos-cnc" text="Tornos CNC" />
                    <NavbarLink className="navbar-item" href="/#tecnologia/tornos-mecanicos" text="Tornos mecânicos" />
                </div>
            </div>
            <NavbarLink className="navbar-item" href="/#contato" text="Contato" />
        </div>);
        return (navbarEnd);
    }
}