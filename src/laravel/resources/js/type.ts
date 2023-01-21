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
    user_favorite: UserFavorite;
    git: Git;
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

export type TableGitArray = {
    コマンド名: string;
    説明: JSX.Element;
    モーダル: JSX.Element;
    オプションリンク: JSX.Element;
    種別: JSX.Element;
    登録日: string;
};

export type TableUserArray = {
    ID: number;
    ユーザ名: string;
    Eメール: string;
    操作: JSX.Element;
    モーダル: JSX.Element;
    登録日: string;
};

export type TableGitOptionArray = {
    ID: number;
    オプション名: string;
    説明: JSX.Element;
    モーダル: JSX.Element;
    更新日: string | null;
    登録日: string;
};

export type UserFavorite = {
    id: number;
    command_id: number;
    user_id: number;
    type: number;
    is_favorite: number;
    created_at: string;
    updated_at: string;
    deleted_at: string;
};
