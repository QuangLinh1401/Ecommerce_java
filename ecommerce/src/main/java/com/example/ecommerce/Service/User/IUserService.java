package com.example.ecommerce.Service.User;

import com.example.ecommerce.DTO.ResponseDto;
import com.example.ecommerce.DTO.User.SignInDto;
import com.example.ecommerce.DTO.User.SignInResponseDto;
import com.example.ecommerce.DTO.User.SignupDto;
import com.example.ecommerce.DTO.User.UserCreateDto;
import com.example.ecommerce.Enum.Role;
import com.example.ecommerce.Exception.AuthenticationFailException;
import com.example.ecommerce.Exception.CustomException;
import com.example.ecommerce.Model.User;

import javax.transaction.Transactional;
import java.security.NoSuchAlgorithmException;

public interface IUserService {

    ResponseDto signUp(SignupDto signupDto)  throws CustomException;

    SignInResponseDto signIn(SignInDto signInDto) throws CustomException;

    String hashPassword(String password) throws NoSuchAlgorithmException;

    ResponseDto createUser(String token, UserCreateDto userCreateDto) throws CustomException, AuthenticationFailException;

    boolean canCrudUser(Role role);

    boolean canCrudUser(User userUpdating, Integer userIdBeingUpdated);
}
