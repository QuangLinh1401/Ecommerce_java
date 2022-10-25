package com.example.ecommerce.Service.Category;

import com.example.ecommerce.Model.Category;
import com.example.ecommerce.Repository.CategoryRepository;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Optional;

@Service
public class CategoryService implements ICategoryService {

    private final CategoryRepository categoryrepository;

    public CategoryService(CategoryRepository categoryrepository) {
        this.categoryrepository = categoryrepository;
    }

    @Override
    public List<Category> listCategories() {
        return categoryrepository.findAll();
    }

    @Override
    public void createCategory(Category category) {
        categoryrepository.save(category);
    }

    @Override
    public Category readCategory(String categoryName) {
        return categoryrepository.findByCategoryName(categoryName);
    }

    @Override
    public Optional<Category> readCategory(Integer categoryId) {
        return categoryrepository.findById(categoryId);
    }

    @Override
    public void updateCategory(Integer categoryID, Category newCategory) {
        Category category = categoryrepository.findById(categoryID).get();
        category.setCategoryName(newCategory.getCategoryName());
        category.setDescription(newCategory.getDescription());
        category.setProducts(newCategory.getProducts());
        category.setImageUrl(newCategory.getImageUrl());

        categoryrepository.save(category);
    }
}
