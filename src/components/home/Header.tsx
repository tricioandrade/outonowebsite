import React from 'react';
import { Container, Nav, NavDropdown, Navbar , Col, Row, Form, Button} from 'react-bootstrap';
import { Link } from 'react-router-dom';


const Header = () => {
    
    return (
        <>
            <div id="topbar" className="d-none d-lg-flex align-items-center fixed-top">
                <div className="container d-flex">
                    <div className="col">
                        <div className="contact-info mr-auto">
                            <i className="icofont-envelope"/>
                            <Link to="mailto:geral@outono.ao">geral@outono.ao</Link>
                            <i className="icofont-phone"/> 
                            <Link to="tel:+244928347743">+244 928 347 743</Link>
                        </div>
                    </div>
                    <div className="col">
                        <div className="social-links float-end">
                            <Link to="https://twitter.com/cpsupport" target="_blank" className="twitter"><i className="icofont-twitter"/></Link>
                            <Link to="https://facebook.com/cpsupport" target="_blank" className="facebook"><i className="icofont-facebook"/></Link>
                            <Link to="https://instagram.com/cpsupport" target="_blank" className="instagram"><i className="icofont-instagram"/></Link>
                            <Link to="https://linkedin.com/cpsupport" target="_blank" className="linkedin"><i className="icofont-linkedin"/></Link>
                        </div>
                    </div>
                </div>
            </div>
            <header id="header" className="fixed-top">
                <nav className="navbar navbar-expand-lg">
                    <div className="container">
                        <Link className="navbar-brand col" to="#">Logo</Link>
                        <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i className="fa fa-toggler"/>
                        </button>
                        <div className="collapse navbar-collapse col" id="navbarSupportedContent">
                            <ul className="navbar-nav me-auto mb-2 mb-lg-0">
                                <li className="nav-item">
                                    <Link className="nav-link active" aria-current="page" to="#"><i className="fa fa-home"/>&nbsp;Home</Link>
                                </li>
                                <li className="nav-item">
                                    <Link className="nav-link" to="#about"><i className="fa fa-question-circle"/>&nbsp;Sobre</Link>
                                </li>
                                <li className="nav-item">
                                    <Link className="nav-link" to="#team"><i className="fa fa-users"/>&nbsp;Equipe</Link>
                                </li>
                                <li className="nav-item">
                                    <Link className="nav-link" to="#contact"><i className="fa fa-phone-alt"/>&nbsp;Contacto</Link>
                                </li>
                                <li className="nav-item">
                                    <Link className="nav-link" to="#" aria-disabled="true"><i className="fa fa-shopping-bag"/>&nbsp;Encomendar</Link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>    
        </>
    );
}


export default Header; 