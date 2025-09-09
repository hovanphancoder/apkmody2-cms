#!/bin/bash

# APK Mod CMS Version Manager
# Sử dụng: ./version-manager.sh [major|minor|patch|hotfix] "commit message"

# Màu sắc cho output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Hàm hiển thị help
show_help() {
    echo -e "${BLUE}APK Mod CMS Version Manager${NC}"
    echo "Usage: $0 [major|minor|patch|hotfix] \"commit message\""
    echo ""
    echo "Commands:"
    echo "  major   - Tăng phiên bản chính (1.0.0 -> 2.0.0)"
    echo "  minor   - Tăng phiên bản phụ (1.0.0 -> 1.1.0)"
    echo "  patch   - Tăng phiên bản sửa lỗi (1.0.0 -> 1.0.1)"
    echo "  hotfix  - Tạo hotfix từ main (1.0.0 -> 1.0.1-hotfix.1)"
    echo ""
    echo "Examples:"
    echo "  $0 patch \"Fix login bug\""
    echo "  $0 minor \"Add new features\""
    echo "  $0 major \"Complete rewrite\""
}

# Kiểm tra tham số
if [ $# -lt 2 ]; then
    show_help
    exit 1
fi

VERSION_TYPE=$1
COMMIT_MSG=$2

# Lấy phiên bản hiện tại
CURRENT_VERSION=$(git describe --tags --abbrev=0 2>/dev/null || echo "v0.0.0")
CURRENT_VERSION=${CURRENT_VERSION#v} # Bỏ prefix 'v'

# Tách version thành array
IFS='.' read -ra VERSION_PARTS <<< "$CURRENT_VERSION"
MAJOR=${VERSION_PARTS[0]:-0}
MINOR=${VERSION_PARTS[1]:-0}
PATCH=${VERSION_PARTS[2]:-0}

# Tăng version theo type
case $VERSION_TYPE in
    "major")
        MAJOR=$((MAJOR + 1))
        MINOR=0
        PATCH=0
        ;;
    "minor")
        MINOR=$((MINOR + 1))
        PATCH=0
        ;;
    "patch")
        PATCH=$((PATCH + 1))
        ;;
    "hotfix")
        # Tạo hotfix branch
        HOTFIX_NUM=1
        if [[ $PATCH == *"hotfix"* ]]; then
            # Nếu đã có hotfix, tăng số
            HOTFIX_NUM=$(echo $PATCH | grep -o '[0-9]*$')
            HOTFIX_NUM=$((HOTFIX_NUM + 1))
        fi
        PATCH="${PATCH}-hotfix.${HOTFIX_NUM}"
        ;;
    *)
        echo -e "${RED}Error: Invalid version type. Use major|minor|patch|hotfix${NC}"
        show_help
        exit 1
        ;;
esac

NEW_VERSION="v${MAJOR}.${MINOR}.${PATCH}"

echo -e "${BLUE}Current version: ${CURRENT_VERSION}${NC}"
echo -e "${GREEN}New version: ${NEW_VERSION}${NC}"

# Kiểm tra có thay đổi chưa commit không
if [ -n "$(git status --porcelain)" ]; then
    echo -e "${YELLOW}Warning: You have uncommitted changes. Committing them now...${NC}"
    git add .
    git commit -m "Auto-commit before version bump: $COMMIT_MSG"
fi

# Tạo tag mới
echo -e "${BLUE}Creating tag: ${NEW_VERSION}${NC}"
git tag -a "$NEW_VERSION" -m "Release $NEW_VERSION: $COMMIT_MSG"

# Push code và tag
echo -e "${BLUE}Pushing to remote...${NC}"
git push origin main
git push origin "$NEW_VERSION"

echo -e "${GREEN}✅ Successfully released ${NEW_VERSION}${NC}"
echo -e "${YELLOW}Release notes: $COMMIT_MSG${NC}"

# Hiển thị thông tin release
echo ""
echo -e "${BLUE}📋 Release Information:${NC}"
echo "Version: $NEW_VERSION"
echo "Message: $COMMIT_MSG"
echo "Date: $(date)"
echo "Branch: $(git branch --show-current)"
echo ""
echo -e "${GREEN}🎉 Release completed successfully!${NC}"
