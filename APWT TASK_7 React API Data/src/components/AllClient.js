import React, {useState, useEffect} from "react";
import axios from "axios";
import Client from './Client';

const AllClient = ()=>{
    const [clients, setClients] = useState([]);

    useEffect(()=>{
        axios.get("http://127.0.0.1:8000/api/client_list")
            .then(resp=>{
                console.log(resp.data);
                setClients(resp.data);
            }).catch(err=>{
            console.log(err);
        });
    },[]);

    return(
        <div className={'bg-light'}>
            <table className="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                </tr>
                </thead>
                <tbody>
                {
                    clients.map(client=>(
                        <Client id={client.id} name={client.name} email={client.email} address={client.address}></Client>
                    ))
                }
                </tbody>
            </table>
        </div>
    )

}
export default AllClient;