import React from "react";
import App from "app";

import ViewHome from "./views/home";
import ViewAbout from "./views/about";
import ViewDefault from "./views/default";
import ViewProducts from "./views/products";
import ViewClients from "./views/clients";
import ViewQuality from "./views/quality";
import ViewVisitors from "./views/visitors";
import ViewTechnology from "./views/technology";
import ViewTechnologyHorizontal from "./views/technology-horizontal";
import ViewTechnologyVertical from "./views/technology-vertical";
import ViewTechnologyMeasure from "./views/technology-measure";
import ViewTechnologyTeeth from "./views/technology-teeth";
import ViewTechnologyFresa from "./views/technology-fresa";
import ViewTechnologyDrills from "./views/technology-drills";
import ViewTechnologyCnc from "./views/technology-cnc";
import ViewTechnologyMechanics from "./views/technology-mechanics";
import ViewStrategy from "./views/strategy";
import ViewContact from "./views/contact";
import FragmentTechnology from "./fragments/technology";
import FragmentAbout from "./fragments/about";

export default class Content extends App {
    constructor(props) {
        super(props);
        this.getContent = this.getContent.bind(this);
        this.getView = this.getView.bind(this);
        this.getFragment = this.getFragment.bind(this);
    }
    getFragment(fragment) {
        return fragment;
    }
    getView(view) {
        return view;
    }
    getContent(content) {
        let view = null;
        switch (content) {
            case "#nossa-empresa":
            view = <ViewDefault content={<ViewAbout />} fragment={<FragmentAbout />} />;
            break;
            case "#nossa-empresa/plano-estrategico":
                view = <ViewDefault content={<ViewStrategy />} />;
                break;
            case "#nossa-empresa/guia-do-visitante":
                view = <ViewDefault content={<ViewVisitors />} />;
                break;
            case "#produtos":
                view = <ViewDefault content={<ViewProducts />} />;
                break;
            case "#clientes":
                view = <ViewDefault content={<ViewClients />} />;
                break;
            case "#qualidade":
                view = <ViewDefault content={<ViewQuality />} />;
                break;
            case "#qualidade/certificacoes":
                view = <ViewDefault content={<ViewQuality />} />;
                break;
            case "#qualidade/politica-integrada-qualidade-e-meio-ambiente":
                view = <ViewDefault content={<ViewQuality />} />;
                break;
            case "#tecnologia":
                view = <ViewDefault content={<ViewTechnology />} fragment={<FragmentTechnology />} />;
                break;
            case "#tecnologia/centros-de-usinagem-horizontais":
                view = <ViewDefault content={<ViewTechnologyHorizontal />} fragment={<FragmentTechnology />} />;
                break;
            case "#tecnologia/centros-de-usinagem-verticais":
                view = <ViewDefault content={<ViewTechnologyVertical />} fragment={<FragmentTechnology />} />;
                break;
            case "#tecnologia/equipamentos-de-medicao":
                view = <ViewDefault content={<ViewTechnologyMeasure />} fragment={<FragmentTechnology />} />;
                break;
            case "#tecnologia/escateladora-de-dentes":
                view = <ViewDefault content={<ViewTechnologyTeeth />} fragment={<FragmentTechnology />} />;
                break;
            case "#tecnologia/fresadoras":
                view = <ViewDefault content={<ViewTechnologyFresa />} fragment={<FragmentTechnology />} />;
                break;
            case "#tecnologia/furadeiras":
                view = <ViewDefault content={<ViewTechnologyDrills />} fragment={<FragmentTechnology />} />;
                break;
            case "#tecnologia/tornos-cnc":
                view = <ViewDefault content={<ViewTechnologyCnc />} fragment={<FragmentTechnology />} />;
                break;
            case "#tecnologia/tornos-mecanicos":
                view = <ViewDefault content={<ViewTechnologyMechanics />} fragment={<FragmentTechnology />} />;
                break;
            case "#contato":
                view = <ViewDefault content={<ViewContact />} />;
                break;
            default:
                view = <ViewDefault fullwidth={<ViewHome />} />;
                break;
        }
        return view;
    }
    render() {
        const content = (
            <section>
                {this.getContent(this.props.content)}
            </section>
        );
        return content;
    }
}