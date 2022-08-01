import React from "react";
import { Link } from "react-router-dom";
const Head = () => {
    return(
        <div className="container">
            <header className="d-flex justify-content-center py-3">
                <ul className="nav nav-pills">
                    <li className="nav-item"><Link className="nav-link" to="/">Home</Link></li>
                    <li className="nav-item"><Link className="nav-link active" to="/clients">Clients</Link></li>
                </ul>
            </header>
        </div>
    )
}
export default Head;