import { useEffect, useState } from "react";
import "./feladat.css";
import { Card, Button, Form } from "react-bootstrap";
import { getValue } from "@testing-library/user-event/dist/utils";

function Feladat(props) {
  const [feladat, setfeladat] = useState(props.feladat);
  const [valasz, setvalasz] = useState();

  const valaszBealitas = () => {
    setvalasz();
  };

  return (
    <div className="Feladat">
      <div className="paros">
        <div className="Angol">{feladat.Angol}</div>
        <div className="magyar">
          <input type="text"  onChange={(e) => setvalasz(e.target.value)} />
        </div>
        <div></div>
      </div>
    </div>
  );
}

export default Feladat;
