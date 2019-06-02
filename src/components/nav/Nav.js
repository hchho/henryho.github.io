import React, { useState } from 'react'
import './Nav.scss'
import Sections from '~/content/sections'

const Nav = ({ onSelect }) => {
  const [activeIndex, setIndex] = useState(0)

  const handleClick = index => {
    onSelect(index)
    setIndex(index)
  }

  return (
  <nav>
    <ul>
      {Sections.map((section, index) => (
        <li className={index === activeIndex && 'active'} onClick={() => handleClick(index)}>
            {section.title}
        </li>
      ))}
    </ul>
  </nav>
)}

export default Nav