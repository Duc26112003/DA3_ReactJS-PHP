import React from 'react';
import logo from './logo.svg';
import './App.css';
import Header from './components/header';
import Footer from './components/footer';
import SlideShow from './page/slideshow';
import SanPhamList from './sanphamList';
import Home from './page/home';

function App() {
  return (
    <div className="App">
      <Header />
      <SlideShow />
      <Home/>
      <SanPhamList />
      <Footer />
    </div>
  );
}

export default App;
