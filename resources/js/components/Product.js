import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import Skeleton from 'react-loading-skeleton';

export class Product extends Component {

    constructor(){
        super()
        this.state = {
            listProduct: [], 
            loading: true
        }
        console.log(super());
    }

    componentDidMount(){
        axios.get('/api/apiProducts').then(Response => {
            this.setState({
                listProduct: Response.data,
            });
        }).catch(Error => {
            console.log(Error);
            
        })
    }

    render() {
        return (
            <div className='container'>
                <div className='row'>
                {this.state.listProduct.map((product, index )=>
                    
                    <div key={index} className='col-md-3'>
                        {this.state.loading  ? <div className="card">
                            <div className="card-header">
                                {index}
                            </div>
                            <div className="card-body">
                                <h5 className="card-title">{product.productname}</h5>
                                <p className="card-text">Content</p>
                            </div>
                            <div className="card-footer">
                                Footer
                            </div>
                        </div> : <Skeleton height={300}/>}
                    </div>
                
                    )}
                </div>
            </div>
        );
    }
}

export default Product;

if (document.getElementById('content-product')) {
    ReactDOM.render(<Product />, document.getElementById('content-product'));
}
