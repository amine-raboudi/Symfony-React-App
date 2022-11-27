import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router } from 'react-router-dom';
import './styles/app.css';
import ListUsers from "./components/ListUsers";


ReactDOM.render(
    (
        <ListUsers/>
    ),
            document.querySelector('#app')
)
