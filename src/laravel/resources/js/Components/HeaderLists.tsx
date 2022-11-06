import React from 'react';
import NavLink from '@/Components/NavLink';

//コマンドの種類
const headerTypes: Array<Array<string>> = [
    ['Git', 'dashboard'],
    ['Docker', 'dashboard'],
    ['Docker-Compose', 'dashboard'],
    ['Npm', 'dashboard'],
    ['Yarn', 'dashboard'],
];

const headerListData = (): JSX.Element[] => {
    return headerTypes.map((headerType: any) => {
        return (
            <NavLink href={route(headerType[1])} active={route().current(headerType[1])} key={headerType[0]}>
                {headerType[0]}
            </NavLink>
        );
    });
};

const HeaderLists = (): JSX.Element => {
    return <div className="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">{headerListData()}</div>;
};

export default HeaderLists;
