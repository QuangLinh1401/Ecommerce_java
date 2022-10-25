package com.example.ecommerce.Service.Order;

import com.example.ecommerce.DTO.Checkout.CheckoutItemDto;
import com.example.ecommerce.Exception.OrderNotFoundException;
import com.example.ecommerce.Model.Order;
import com.example.ecommerce.Model.User;
import com.stripe.exception.StripeException;
import com.stripe.model.checkout.Session;
import com.stripe.param.checkout.SessionCreateParams;

import java.util.List;

public interface IOrderService {

    // create total price
    SessionCreateParams.LineItem.PriceData createPriceData(CheckoutItemDto checkoutItemDto);

    // build each product in the stripe checkout page
    SessionCreateParams.LineItem createSessionLineItem(CheckoutItemDto checkoutItemDto);

    // create session from list of checkout items
    Session createSession(List<CheckoutItemDto> checkoutItemDtoList) throws StripeException;

    void placeOrder(User user, String sessionId);

    List<Order> listOrders(User user);

    Order getOrder(Integer orderId) throws OrderNotFoundException;
}
