import "scss/style.scss";
import React, {Component} from "react";
import { createRoot } from 'react-dom/client';
import Layout from "components/layout";

const layout = (<Layout />);
const targetDiv = document.getElementById("app");
const root = createRoot(targetDiv);
root.render(layout);