import React from 'react';
import { Container, Nav, NavDropdown, Navbar , Col, Row, Form, Button} from 'react-bootstrap';
import { Link } from 'react-router-dom';


const Header = () => {
    
    return (
        <>
            {/* <div id="topbar" className="d-none d-lg-flex align-items-center fixed-top">
                <div className="container d-flex">
                    <div className="col">
                        <div className="contact-info mr-auto">
                            <i className="icofont-envelope"/>
                            <a href="mailto:geral@outono.ao">geral@outono.ao</a>
                            <i className="icofont-phone"/> 
                            <a href="tel:+244928347743">+244 928 347 743</a>
                        </div>
                    </div>
                    <div className="col">
                        <div className="social-links float-end">
                            <a href="https://twitter.com/cpsupport" target="_blank" className="twitter"><i className="icofont-twitter"/></a>
                            <a href="https://facebook.com/cpsupport" target="_blank" className="facebook"><i className="icofont-facebook"/></a>
                            <a href="https://instagram.com/cpsupport" target="_blank" className="instagram"><i className="icofont-instagram"/></a>
                            <a href="https://linkedin.com/cpsupport" target="_blank" className="linkedin"><i className="icofont-linkedin"/></i></a>
                        </div>
                    </div>
                </div>
            </div> */}
            <header id="header" className="fixed-top">
                <nav className="navbar navbar-expand-lg">
                    <div className="container">
                        <a className="navbar-brand col" href="#"><img src="<?php echo outonologo;?>" alt="" style="width: 100px;"></a>
                        <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i className="fa fa-toggler"/>
                        </button>
                        <div className="collapse navbar-collapse col" id="navbarSupportedContent">
                            <ul className="navbar-nav me-auto mb-2 mb-lg-0">
                                <li className="nav-item">
                                    <a className="nav-link active" aria-current="page" href="#"><i className="fa fa-home"/>&nbsp;Home</a>
                                </li>
                                <li className="nav-item">
                                    <a className="nav-link" href="#about"><i className="fa fa-question-circle"/>&nbsp;Sobre</a>
                                </li>
                                <li className="nav-item">
                                    <a className="nav-link" href="#team"><i className="fa fa-users"/>&nbsp;Equipe</a>
                                </li>
                                <li className="nav-item">
                                    <a className="nav-link" href="#contact"><i className="fa fa-phone-alt"/>&nbsp;Contacto</a>
                                </li>
                                <li className="nav-item">
                                    <a className="nav-link" href="#" tabindex="-1" aria-disabled="true"><i className="fa fa-shopping-bag"/>&nbsp;Encomendar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>    
        </>
    )
}


export default Header; 