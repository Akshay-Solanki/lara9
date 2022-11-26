import React from "react";
import TBody from "./TBody";
import Thead from "./Thead";

export default function Table(props) {
    return (
        <table className="min-w-full">
            {props.children}
        </table>
    );
}
