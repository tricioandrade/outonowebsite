import React from "react";
import { Container, Form, Row } from "react-bootstrap";
import img from '../../assets/2.jpg';

const About = () => {
    

    return (
        <section id="about">
            <div className="container-fluid">
                <div className="row">
                    <div className="col col-lg-6 col-md-6 col-sm-12 d-flex align-items-baseline">
                        <div className="about-content">
                            <h4 className="title">
                                "O software <br/>que alcança todos" 
                            </h4>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio nihil nesciunt aut molestiae? Ducimus eaque quo facilis sequi ullam vitae blanditiis repudiandae, qui in, deleniti commodi neque provident rem asperiores!
                            </p>
                            <div className="accordion" id="accordion-about">
                                <div className="accordion-item">
                                    <h2 className="accordion-header" id="headingOne">
                                        <button className="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i className="fa fa-money-bill"></i>&nbsp;Lorem ipsum dolor sit.
                                        </button>
                                    </h2>
                                    <div id="collapseOne" className="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div className="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classNamees that we use to style each element. These classNamees control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div className="accordion-item">
                                    <h2 className="accordion-header" id="headingTwo">
                                        <button className="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i className="fa fa-users"></i>&nbsp;Amet consectetur.
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" className="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div className="accordion-body">
                                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classNamees that we use to style each element. These classNamees control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div className="accordion-item">
                                    <h2 className="accordion-header" id="headingThree">
                                        <button className="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i className="fa fa-lock"></i>&nbsp;Dornet Corenmun
                                        </button>
                                    </h2>
                                    <div id="collapseThree" className="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div className="accordion-body">
                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classNamees that we use to style each element. These classNamees control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
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
    );
};


export default About;