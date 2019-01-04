import React from "react";
import App from "app";
import NavbarLink from "../navbar/navbar-link";

export default class FragmentTechnology extends App {
    constructor(props) {
        super(props);
    }
    render() {
        const fragment = (
            <aside className="menu">
                <p className="menu-label">
                    Tecnologias
                </p>
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
            </aside>
        );
        return fragment;

    }
}