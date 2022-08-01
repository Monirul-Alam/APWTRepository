import React from "react";

const Client = (props) => {

    return (
        <tr>
            <th scope="row">{props.id}</th>
            <td>{props.name}</td>
            <td>{props.email}</td>
            <td>{props.address}</td>
        </tr>

    )

}
export default Client;