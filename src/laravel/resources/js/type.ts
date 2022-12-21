//Git関係
export type Git = {
    id: number;
    git_name: string;
    git_type: number;
    description: string;
    created_at: string;
    updated_at: string | null;
    deleted_at: string | null;
};

export type Gits = {
    links: Links[];
    data: Git[];
    current_page: number;
};

//ユーザ関係
export type User = {
    id: number;
    name: string;
    email: string;
    email_verified_at: string | null;
    roll: number;
    created_at: string;
    updated_at: string | null;
    deleted_at: string | null;
};

export type Auth = {
    user: User;
};

export type Users = {
    links: Links[];
    data: User[];
    current_page: number;
};

//GitOption関係
export type GitOption = {
    id: number;
    git_id: number;
    git_option: string;
    description: string;
    created_at: string;
    updated_at: string | null;
    deleted_at: string | null;
};

export type GitOptions = {
    links: Links[];
    data: GitOption[];
    current_page: number;
};

export type Links = {
    active: boolean;
    label: string;
    url: string | null;
};
