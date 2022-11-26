import React from 'react'

export default function Td(props) {
  return (
    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
        {props.children}
    </td>
  )
}
