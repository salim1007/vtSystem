const Auth = {
    setToken(token) {
        sessionStorage.setItem('jwt_token', token);
    },
    getToken() {
        return sessionStorage.getItem('jwt_token');
    },
    removeToken() {
        sessionStorage.removeItem('jwt_token');
    }
};

export default Auth;
