import React, { useEffect } from 'react';
import NavLink from '../Atoms/NavLink';

const PaginationLists = (props: any) => {
    const paginationList = props.links;

    return paginationList.map((paginationData: any, index: any) => {
        const unescapeHTML = (html: any) => {
            var escapeEl = document.createElement('textarea');
            escapeEl.innerHTML = html;
            return escapeEl.textContent;
        };
        return (
            <NavLink
                href={paginationData.url}
                active={paginationData.active}
                children={unescapeHTML(paginationData.label)}
                key={index}
            />
        );
    });
};

const PaginationList = (props: any): JSX.Element => {
    return (
        <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-5 absolute bottom-5 left-1/2">
            <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div className="p-6 bg-white border-b border-gray-200 sm:flex space-x-8 place-items-center">
                    {PaginationLists(props)}
                </div>
            </div>
        </div>
    );
};

export default PaginationList;
