import Feladat from "../feladat/feladat";
import "./feladatok.css";

import { useEffect, useState } from "react";
function Feladatok() {
  const [feladatok, setfeladatok] = useState([]);





  useEffect(() => {
    fetch("http://localhost:8000/api/szavak/téma")
      .then((response) => response.json())
      .then((data) => {
        setfeladatok(data);
      })
      .catch((error) => {
        console.error("Error:", error);
      });
   
  }, []);



  return (
    <div className="Feladatok">
    <div className="cimek"> <h1>Angol</h1> <h1>Magyar</h1> <h1>eredmeny</h1></div>
   

      {feladatok.map((elem,index) =>(
        <Feladat key={index} feladat={elem}/>
      ))}
    </div>
  );
}

export default Feladatok;
