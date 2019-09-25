import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Navbar extends Component {
    render() {
        return (
            <div className="navbar navbar-expand-lg navbar-dark bg-dark">

                <a href='/' className="navbar-brand">CRUD REACT</a>

                <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span className="navbar-toggler-icon"></span>
                </button>

                <div className="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul className="navbar-nav mr-auto">
                        <li className="nav-item active">
                            <a className="nav-link" href="/">Beranda <span className="sr-only">(current)</span></a>
                        </li>
                        <li className="nav-item">
                            <a className="nav-link" href="/product">Product</a>
                        </li>
                    
                    </ul>
                </div>
            </div>
        );
    }
}

if (document.getElementById('Header')) {
    ReactDOM.render(<Navbar />, document.getElementById('Header'));
}