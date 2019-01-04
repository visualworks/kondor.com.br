import React from "react";
import App from "app";

export default class ViewClients extends App {
    constructor(props) {
        super(props);
    }
    render() {
        const content = <div className="content">
            <h3 className="title">Clientes</h3>
            <div className="columns">
                <figure className="column image">
                    <img src="/img/client-cnhi.jpg" alt="CNHI" title="CNHI" />
                </figure>
                <figure className="column image">
                    <img src="/img/client-volvo.jpg" alt="Volvo" title="Volvo" />
                </figure>
                <figure className="column image">
                    <img src="/img/client-zf.jpg" alt="ZF" title="ZF" />
                </figure>
                <figure className="column image">
                    <img src="/img/client-tiph.jpg" alt="TIPH" title="TIPH" />
                </figure>
                <figure className="column image">
                    <img src="/img/client-sifco.jpg" alt="SIFCO" title="SIFCO" />
                </figure>
            </div>
            <div className="columns">
                <figure className="column image">
                    <img src="/img/client-frum.jpg" alt="FRUM" title="FRUM" />
                </figure>
                <figure className="column image">
                    <img src="/img/client-fundimig.jpg" alt="FundiMig" title="FundiMig" />
                </figure>
                <figure className="column image">
                    <img src="/img/client-intercast.jpg" alt="Intercast" title="Intercast" />
                </figure>
                <figure className="column image">
                    <img src="/img/client-jacto.jpg" alt="Jacto" title="Jacto" />
                </figure>
                <figure className="column image">
                    <img src="/img/client-komatsu.jpg" alt="Komatsu" title="Komatsu" />
                </figure>
            </div>
            <div className="columns">
                <figure className="column image">
                    <img src="/img/client-mwm.jpg" alt="MWM" title="MWM" />
                </figure>
                <figure className="column image">
                    <img src="/img/client-fagor.jpg" alt="Fagor" title="Fagor" />
                </figure>
                <figure className="column image">
                    <img src="/img/client-dana.jpg" alt="Dana" title="Dana" />
                </figure>
                <figure className="column image">
                    <img src="/img/client-cummins.jpg" alt="Cummins" title="Cummins" />
                </figure>
                <figure className="column image">
                    <img src="/img/client-amstedmaxion.jpg" alt="AmstedMaxion" title="AmstedMaxion" />
                </figure>
            </div>
            <div className="columns">
                <figure className="column image">
                    <img src="/img/client-logo_cruzaco.jpg" alt="Cruzaço" title="Cruzaço" />
                </figure>
                <figure className="column image">
                    <img src="/img/client-logo_meritor.jpg" alt="Meritor" title="Meritor" />
                </figure>
                <figure className="column image">
                    <img src="/img/client-painco.jpg" alt="Painco" title="Painco" />
                </figure>
                <figure className="column image">
                    <img src="/img/client-schulz.jpg" alt="Schulz" title="Schulz" />
                </figure>
                <figure className="column image">
                    <img src="/img/client-wetzel.jpg" alt="Wetzel" title="Wetzel" />
                </figure>
            </div>
        </div>;
        return (content);
    }
}