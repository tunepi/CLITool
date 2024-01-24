import React from 'react';
import SidebarList from '../Organisms/SidebarList';

const Sidebar = () => {
    return (
        <aside className="w-64 mt-5 ml-10" aria-label="Sidebar">
            <div className="overflow-y-auto py-4 px-3 bg-white">
                <SidebarList />
            </div>
        </aside>
    );
};

export default Sidebar;
