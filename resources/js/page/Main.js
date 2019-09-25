import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter, Switch, Route } from 'react-router-dom'


import Navbar from '../components/Navbar';
import Footer from '../components/Footer';
import Footerproduct from '../components/Footerproduct';
import Product from '../components/Product';

export default class Main extends Component {
    render() {
        return (
            <div>
                <Navbar />
                <BrowserRouter>
                    <Switch>
                        <Route path='/product' component={Product}></Route>
                    </Switch>
                </BrowserRouter>
                <Footer />
            </div>
        );
    }
}

if (document.getElementById('main-contet')) {
    ReactDOM.render(<Main />, document.getElementById('main-contet'));
}



