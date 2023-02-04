import React  from "react";
import { Card, Col, Container, Row } from "react-bootstrap";
import { Link } from "react-router-dom";
import img from '../../assets/1.jpg';


const Advantage = () => {




    return (
<section id="pub">
    <div className="container-fluid">
        <div className="row">
            <div className="col col-lg-6 col-md-6 col-sm-12">
                <div className="pub-content">
                    <h4 className="title">
                        Um software a seu gosto 
                    </h4>
                    <div className="pub-tooltipes tool-description ">
                        <ul>
                            <li>
                                <button type="button" className="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                                    Fácil
                                </button>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing 
                                    elit. aliquid earum dolor architecto, 
                                    distinctio corrupti? Necessitatibus natus eius soluta maxime.
                                </p>
                            </li>
                            <li>
                                <button type="button" className="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                                    Amigável
                                </button>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing 
                                    elit.  aliquid earum dolor architecto, 
                                    distinctio corrupti? Necessitatibus natus eius soluta maxime.
                                </p>
                            </li>
                            <li>
                                <button type="button" className="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">
                                    Confortável
                                </button>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing 
                                    elit. aliquid earum dolor architecto, 
                                    distinctio corrupti? Necessitatibus natus eius soluta maxime.
                                </p>
                            </li>
                        </ul>      
                    </div>
                </div>
            </div>
            <div className="d-flex col col-lg-6 col-md-6 col-sm-12">
                        <img style={{
                        width: '100%',
                        borderRadius: '110px',
                        objectFit: 'cover',
                        bottom:0
                    }} src={ img } />
                    </div>
        </div>
    </div>
</section>
    )
}
export default Advantage;