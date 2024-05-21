import { useEffect, useState } from 'react';
import './feladat.css';
import { Card ,Button, Form } from 'react-bootstrap';
import { getValue } from '@testing-library/user-event/dist/utils';

function Feladat(props) {
    const [feladat, setfeladat] = useState(props.feladat);
    const [valasz, setvalasz] = useState();
 
  
     
  
  return (
    <div className="Feladat">
   
    <Card style={{ width: '18rem' }}>
  
      <Card.Body>
      <div className='paros'>
      <div className='Angol'>{feladat.Angol}</div>
   
      <div className='magyar'>   <input type="text"  /></div></div>

      </Card.Body>
    </Card>
    </div>
  );
}

export default Feladat;
