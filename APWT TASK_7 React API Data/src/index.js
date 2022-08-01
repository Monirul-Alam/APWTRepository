import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import AllClient from "./components/AllClient";
import Head from "./components/Head";
import Foot from "./components/Foot";
import {BrowserRouter as Router, Route, Routes} from 'react-router-dom'

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
    <React.StrictMode>
        <Router>
            <Head/>
            <Routes>
                <Route exact path='/clients' element={<AllClient/>} />
            </Routes>
            <Foot/>
        </Router>
    </React.StrictMode>
);