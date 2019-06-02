import React, { useState } from 'react';
import './App.scss';
import { Footer, Header, Nav, Section } from '~/components'

export const App = ({ sections = [], footer}) => {
  const [activeSection, setSection] = useState(0)
  return (
  <div className="container">
    <Header />
    <Nav onSelect={(index) => setSection(index)}/>
    <Section {...sections[activeSection]} />
    <Footer contacts={footer.contacts} />
  </div>
)}

export default App;
