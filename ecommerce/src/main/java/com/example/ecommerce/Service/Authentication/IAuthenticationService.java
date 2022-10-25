package com.example.ecommerce.Service.Authentication;

import com.example.ecommerce.Exception.AuthenticationFailException;
import com.example.ecommerce.Model.AuthenticationToken;
import com.example.ecommerce.Model.User;

public interface IAuthenticationService {

    void saveConfirmationToken(AuthenticationToken authenticationToken);

    AuthenticationToken getToken(User user);

    User getUser(String token);

    void authenticate(String token) throws AuthenticationFailException;
}
