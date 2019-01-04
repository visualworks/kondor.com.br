import React from "react";
import App from "app";

export default class ViewTechnology extends App {
    constructor(props) {
        super(props);
    }
    render() {
        const view = (<div className="content">
            <h2 className="title">Tecnologia</h2>
            <p>Sempre preocupados com a qualidade e a precisão que cada cliente necessita, a Kondor está em constante atualização de equipamentos e treinamento de profissionais capazes de operar e maximizar a operação.</p>
            <p>Confira ao lado, a relação de equipamentos utilizados por nossa empresa na execução das tarefas do dia-a-dia.</p>
            <p>Saiba ainda que, além disso, contamos com uma ampla equipe de engenheiros e técnicos qualificados, a qual assegura total qualidade dos projetos e serviços prestados pela Kondor.</p>
            {/* { this.getFragmentProducts(this.state.content) } */}
        </div>);
        return view;

    }
}