import React from 'react'
import Footer from './Footer.jsx'
import Header from './Header.jsx'
import Search from './Search.jsx'
import ProductList from './ProductList.jsx'


export default class App extends React.Component {
  constructor() {
    super()

  }

  render() {
    return(
      <div id="page">
        <Header />

        <div id="main">
            <Search />

            <div className="content">
                <h1>Products</h1>

            <ProductList />
                

            </div>

        </div>

      <Footer />

  </div>
    )
  }
}