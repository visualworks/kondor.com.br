import React from "react";
import App from "app";

export default class ViewHome extends App {
    constructor(props) {
        super(props);
    }
    render() {
        let heroBannerA = (<section className="hero banner-commitment is-primary is-medium">
            <div className="hero-body">
                <div className="container">
                    <h1 className="title">Comprometimento</h1>
                </div>
            </div>
        </section>);
        let heroBannerB = (<section className="hero banner-project is-primary is-medium">
            <div className="hero-body">
                <div className="container">
                    <h1 className="title has-text-primary">Desenvolvimento de produto<br />conforme desenho e especificação</h1>
                </div>
            </div>
        </section>);
        let heroBannerC = (<section className="hero banner-product is-primary is-medium">
            <div className="hero-body">
                <div className="container">
                    <h1 className="title">Usinagem de Alta Precisão</h1>
                </div>
            </div>
        </section>);
        let homeHighlight = (<section className="hero">
            <div className="hero-body">
                <div className="has-text-centered">
                    <h3 className="subtitle"></h3>
                </div>
            </div>
        </section>);
        let homeQuality = (<div className="columns certificates">
            <div className="column">
                <figure className="image is-128x128">
                    <img src="/img/certificates/certificate-IATF-16949-2016.jpg" alt="IATF 16949 - CERTIFIED" title="IATF 16949 - CERTIFIED" />
                </figure>
            </div>
            {/*<div className="column">*/}
            {/*    <figure className="image is-128x128">*/}
            {/*        <img src="/img/certificates/ISO-9001-positive-screen-RGB.jpg" alt="ISO 9001" title="ISO 9001" />*/}
            {/*    </figure>*/}
            {/*</div>*/}
            <div className="column">
                <figure className="image is-128x128">
                    <img src="/img/certificates/ISO-14001-positive-screen-RGB.jpg" alt="ISO 14001" title="ISO 14001" />
                </figure>
            </div>
        </div>);
        let homeContent = (<section className="main-content section">
            <div className="container">
                <div className="columns">
                    <div className="column is-two-thirds">
                        <div className="columns">
                            <div className="column">
                                <figure className="image is-4by3">
                                    <img src="/img/banner-office-min.jpg" alt="Indústria Mecânica Kondor" title="Indústria Mecânica Kondor" />
                                </figure>
                                <hr />
                                <figure className="image is-4by3">
                                    <img src="/img/img-office-min.jpg" alt="Indústria Mecânica Kondor" title="Indústria Mecânica Kondor" />
                                </figure>
                            </div>
                            <div className="column is-two-thirds">
                                <h3 className="subtitle">Kondor - Usinagem e Tecnologia em Mecânica</h3>
                                <p>A <strong>Indústria Mecânica Kondor</strong> atua no mercado há mais de 40 anos, prestando serviços de usinagem de alta-precisão destinadas à montadoras de veículos pesados, como tratores, caminhões e implementos agrícolas, bem como o setor automotivo e usinagem em geral. Com sede própria localizada na cidade de Itaquaquecetuba-SP especialmente projetada para imprimir excelência de alta qualidade em serviços. A <strong>Kondor</strong> está sempre em busca de atualização por processos de melhoria e qualidade.</p>
                                <h3 className="subtitle">Nossas Certificações</h3>
                                {homeQuality}
                            </div>
                        </div>
                    </div>
                    <div className="column">
                        <h3 className="subtitle">Onde Estamos</h3>
                        <iframe className="iframe-googlemaps" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3660.1224109224922!2d-46.3257634!3d-23.456048600000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce7cf5dd19964f%3A0x4aba6b77b374eaf9!2sRua+Flor+de+Noiva%2C+1029+-+Quinta+da+Boa+Vista+(Industrial)!5e0!3m2!1sen!2s!4v1397008837065"></iframe>
                        <p>Rua Flor de Noiva, 1.029, Itaquaquecetuba, SP<br />CEP 08597-630</p>
                        <p>+55 (11) 4646-8888 | kondor@kondor.com.br</p>
                    </div>
                </div>
            </div>
        </section>);
        return (<div>{heroBannerA}{homeContent}</div>);
    }
}