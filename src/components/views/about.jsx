import React from "react";
import App from "app";

export default class ViewAbout extends App {
    constructor(props) {
        super(props);
    }
    render() {
        const view = (
            <div className="content">
                <h2 className="title">Sobre a empresa</h2>
                <p>A Indústria Mecânica Kondor atua no mercado há mais de 40 anos, prestando serviços de usinagem de alta-precisão destinadas à montadoras de veículos pesados, como tratores, caminhões e implementos agrícolas, bem como o setor automotivo e usinagem em geral.</p>
                <p>Com sede própria localizada na cidade de Itaquaquecetuba-SP, possui uma área de aproximadamente 9.000m2, especialmente projetada para imprimir excelência de alta qualidade em serviços. </p>
                <p>Atualmente a empresa conta com cerca de 100 colaboradores, das mais diversas áreas de especialização e qualificação, os quais são orientados à constante atualização e treinamento, alinhando tendências e necessidades do mercado mecânico e tecnológico.</p>
                <p>Através desta postura de qualificação, a Kondor oferece peças totalmente acabadas em ferro fundido nodular e cinzento, forjados, alumínio e outros materiais metálicos de acordo com as especificações de engenharia e exigência de cada cliente.</p>
                <p>É através desses requisitos, que a Kondor se consagrou como uma empresa qualificada, demonstrando experiência e sabedoria em cada produto que passa em sua linha de produção.</p>
            </div>
        );
        return view;

    }
}