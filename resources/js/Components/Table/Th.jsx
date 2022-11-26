import React from "react";

export default function Th(props) {
    return (
        <th
            scope="col"
            className="text-sm font-medium text-gray-900 px-6 py-4 text-left"
        >
            {props.children}
        </th>
    );
}
